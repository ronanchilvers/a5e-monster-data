---
statblock: true
name: 'Young Bronze Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 10
ac: 17
hp: 152
hit_dice: '16d10 + 64'
speed: '40 ft., fly 80 ft., swim 60 ft'
stats:
    - 20
    - 10
    - 18
    - 14
    - 12
    - 18
damage_immunities: lightning
saves:
    - { dexterity: 4 }
    - { constitution: 8 }
    - { wisdom: 5 }
    - { charisma: 7 }
skillsaves:
    - { insight: 5 }
    - { perception: 5 }
    - { stealth: 4 }
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 18'
languages: 'Common, Draconic'
traits:
    0: { name: Amphibious, desc: 'The dragon can breathe air and water.' }
    1: { name: 'Oracle of the Coast', desc: 'The dragon can accurately predict the weather up to 7 days in advance and is never considered surprised while conscious.' }
    2: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 15). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:fog cloud, speak with animals']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws. In place of its bite, it can use Lightning Pulse.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +13 to hit, reach 10 ft., one target. Hit: 23 (3d10 + 7) piercing damage plus 4 (1d8) lightning damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +13 to hit, reach 5 ft., one target. Hit: 20 (3d8 + 7) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 20 (3d8 + 7) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Trident (Humanoid Form Only)', desc: 'Melee or Ranged Weapon Attack: +13 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 10 (1d6 + 7) piercing damage.' }
    - { name: 'Lightning Pulse', desc: ' The dragon targets one creature within 60 feet, forcing it to make a DC 20 Dexterity saving throw. The creature takes 22 (4d10) lightning damage on a failure or half damage on a success. If the initial target is touching a body of water, all other creatures within 20 feet of it and touching the same body of water must also make the saving throw against this damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Lightning Breath', desc: "The dragon exhales lightning in a 90-foot-long, 5-foot-wide line. Each creature in the area makes a DC 20 Dexterity saving throw, taking 69 (13d10) lightning damage on a failed save or half damage on a success. A creature that fails the saving throw can't take reactions until the end of its next turn." }
    - { name: 'Ocean Surge', desc: 'The dragon exhales a torrent of seawater in a 30-foot cone. Each creature in the area makes a DC 20 Strength saving throw. A creature that fails is pushed 30 feet away from the dragon and knocked prone, while one that succeeds is pushed only 15 feet away.' }
    - { name: 'Change Shape', desc: "The dragon magically takes the shape of a humanoid or beast, or changes back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (dragon's choice). In the new form, the dragon's stats are unchanged except for its size. It can't use Lightning Pulse, Breath Weapons, Tail Attack, or Wing Attack except in dragon form. In beast form, it can attack only with its bite and claws, if appropriate to its form. If the beast form is Large or smaller, the reach of these attacks is reduced to 5 feet. In humanoid form, it can attack only with its trident." }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 18 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 21 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: 'Foresight (Costs 2 Actions)', desc: 'The dragon focuses on the many sprawling futures before it and predicts what will come next. Attacks against it are made with disadvantage until the start of its next turn.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Bronze Dragon
```
