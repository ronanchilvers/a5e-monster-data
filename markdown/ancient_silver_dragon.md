---
statblock: true
name: 'Ancient Silver Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 25
ac: 22
hp: 429
hit_dice: '22d20 + 198'
speed: '40 ft., fly 80 ft.'
stats:
    - 30
    - 14
    - 28
    - 18
    - 14
    - 22
damage_immunities: cold
saves:
    dexterity: 9
    constitution: 16
    wisdom: 9
    charisma: 13
skillsaves:
    arcana: 11
    history: 11
    perception: 9
    stealth: 9
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 22'
languages: 'Common, Draconic, two more'
traits:
    0: { name: 'Cloud Strider', desc: "The dragon suffers no harmful effects from high altitudes. When flying at high altitude, the dragon can, after 1 minute of concentration, discorporate into clouds. In this form, it has advantage on Stealth checks, its fly speed increases to 300 feet, it is immune to all nonmagical damage, it has resistance to magical damage, and it can't take any actions except Hide. If it takes damage or descends more than 500 feet from where it transformed, it immediately returns to its corporeal form. The dragon can revert to its true form as an action." }
    1: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, some of its scales dissipate into clouds. If it has no more uses of this ability, its Armor Class is reduced to 20 until it finishes a long rest.' }
    2: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 23). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:charm person, faerie fire,awaken, geas', " 1/day:heroes' feast, telepathic bond"]
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws. In place of its bite, it can use Spit Frost.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +17 to hit, reach 15 ft., one target. Hit: 32 (4d10 + 10) piercing damage plus 9 (2d8) cold damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +17 to hit, reach 10 ft., one target. Hit: 23 (3d8 + 10) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +17 to hit, reach 20 ft., one target. Hit: 23 (3d8 + 10) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Rapier (Humanoid Form Only)', desc: 'Melee Weapon Attack: +17 to hit, reach 5 ft., one target. Hit: 14 (1d8 + 10) piercing damage.' }
    - { name: 'Spit Frost', desc: " The dragon targets a creature within 60 feet, forcing it to make a DC 24 Constitution saving throw. The target takes 22 (4d10) cold damage on a failure or half damage on a success. On a failure, the creature's Speed is also halved until the end of its next turn. Flying creatures immediately fall unless they are magically kept aloft." }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Frost Breath', desc: 'The dragon exhales freezing wind in a 90-foot cone. Each creature in the area makes a DC 24 Constitution saving throw, taking 90 (20d8) cold damage on a failed save or half damage on a success. On a failure, the creature is also slowed until the end of its next turn.' }
    - { name: 'Paralyzing Breath', desc: 'The dragon exhales paralytic gas in a 90-foot cone. Each creature in the area must succeed on a DC 24 Constitution saving throw or be paralyzed until the end of its next turn.' }
    - { name: 'Change Shape', desc: "The dragon magically takes the shape of a humanoid or beast, or changes back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (dragon's choice). In the new form, the dragon's stats are unchanged except for its size. It can't use Spit Frost, Breath Weapons, Tail Attack, or Wing Attack except in dragon form. In beast form, it can attack only with its bite and claws, if appropriate to its form. If the beast form is Large or smaller, the reach of these attacks is reduced to 5 feet. In humanoid form, it can attack only with its rapier." }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
'legendary actions':
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 21 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 25 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: 'Windstorm (Costs 2 Actions)', desc: "Pounding winds surround the dragon in a 20-foot radius. A creature in this area attempting to move closer to the dragon must spend 2 feet of movement for every 1 foot closer it moves, and ranged attacks against the dragon are made with disadvantage. A creature that starts its turn in the windstorm makes a DC 24 Constitution saving throw, taking 11 (2d10) cold damage on a failure. The windstorm lasts until the start of the dragon's next turn." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Ancient Silver Dragon - A5E
```
