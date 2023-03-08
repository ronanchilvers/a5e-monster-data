---
statblock: true
name: 'Adult Blue Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 19
ac: 19
hp: 275
hit_dice: '22d12 + 132'
speed: '40 ft., burrow 30 ft., fly 80 ft., swim 30 ft.'
stats:
    - 24
    - 10
    - 22
    - 16
    - 14
    - 18
damage_immunities: lightning
saves:
    - { dexterity: 6 }
    - { constitution: 12 }
    - { wisdom: 8 }
    - { charisma: 10 }
skillsaves:
    - { perception: 8 }
    - { stealth: 6 }
    - { survival: 8 }
senses: 'blindsight 60 ft., tremorsense 60 ft., darkvision 120 ft., passive Perception 21'
languages: 'Common, Draconic, one more'
traits:
    0: { name: 'Desert Farer', desc: 'The dragon ignores difficult terrain or obscurement caused by sand or gravel, even while flying. Additionally, it ignores the effects of extreme heat.' }
    1: { name: 'Dune Splitter', desc: 'The dragon can remain submerged in sand and gravel for up to 4 hours. It has advantage on Stealth checks made to hide in this way.' }
    2: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to sand. If it has no more uses of this ability, its Armor Class is reduced to 17 until it finishes a long rest.' }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 18). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:blur, silent image, blight, hypnotic pattern']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can use Arc Lightning.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +13 to hit, reach 10 ft., one target. Hit: 23 (3d10 + 7) piercing damage plus 4 (1d8) lightning damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +13 to hit, reach 5 ft., one target. Hit: 20 (3d8 + 7) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 16 (2d8 + 7) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Arc Lightning', desc: "The dragon targets a creature within 60 feet, forcing it to make a DC 20 Dexterity saving throw. The creature takes 16 (3d10) lightning damage on a failure or half damage on a success. Also on a failure, the lightning jumps. Choose a creature within 30 feet of the target that hasn't been hit by this ability on this turn, and repeat the effect against it, possibly causing the lightning to jump again." }
    - { name: 'Lightning Breath (Recharge 56)', desc: "The dragon exhales a 90-foot-long, 5-foot wide-line of lightning. Each creature in that area makes a DC 20 Dexterity saving throw, taking 77 (14d10) lightning damage on a failed save or half damage on a success. A creature that fails the save can't take reactions until the end of its next turn." }
    - { name: Quake, desc: 'While touching natural ground, the dragon sends pulses of thunder rippling through it. Creatures within 30 feet make a DC 20 Strength saving throw, taking 11 (2d10) bludgeoning damage and falling prone on a failure. If a Large or smaller creature that fails the save is standing on sand, it also sinks partially, becoming restrained as well. A creature restrained in this way can spend half its movement to escape.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 18 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 20 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: 'Quake (Costs 2 Actions)', desc: 'The dragon uses its Quake action.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult Blue Dragon
```
