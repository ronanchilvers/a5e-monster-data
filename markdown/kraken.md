---
statblock: true
name: 'Kraken - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Monstrosity
cr: 25
ac: 20
hp: 444
hit_dice: '24d20 + 192'
speed: '20 ft., swim 60 ft.'
stats:
    - 30
    - 10
    - 26
    - 22
    - 18
    - 18
damage_resistances: 'cold, fire, thunder'
damage_immunities: 'lightning; damage from nonmagical weapons'
saves:
    - { strength: 18 }
    - { constitution: 16 }
    - { dexterity: 8 }
    - { intelligence: 14 }
    - { wisdom: 12 }
senses: 'truesight 120 ft., passive Perception 14'
languages: "understands Primordial but can't speak, telepathy 120 ft."
traits:
    - { name: 'Immortal Nature', desc: "The kraken doesn't require air, sustenance, or sleep." }
    - { name: 'Legendary Resistance (3/Day)', desc: 'If the kraken fails a saving throw, it can choose to succeed instead. When it does so, it can use its reaction, if available, to attack with its tentacle.' }
    - { name: 'Magic Resistance', desc: 'The kraken has advantage on saving throws against spells and magical effects.' }
    - { name: 'Siege Monster', desc: 'The kraken deals double damage to objects and structures.' }
actions:
    - { name: Bite, desc: "Melee Weapon Attack: +18 to hit, reach 5 ft., one target. Hit: 36 (4d12 + 10) piercing damage. If the target is a Huge or smaller creature grappled by the kraken, the target is swallowed. A swallowed creature is blinded and restrained, its Speed is 0, it has total cover from attacks from outside the kraken, and it takes 42 (12d6) acid damage at the start of each of the kraken's turns." }
    - { name: 'If a swallowed creature deals 50 or more damage to the kraken in a single turn, or if the kraken dies, the kraken vomits up the creature', desc: '' }
    - { name: 'Ink Cloud', desc: "While underwater, the kraken exudes a cloud of ink in a 90-foot-radius sphere. The ink extends around corners, and the area is heavily obscured until the end of the kraken's next turn or until a strong current dissipates the cloud. Each non-kraken creature in the area when the cloud appears makes a DC 24 Constitution saving throw. On a failure, it takes 27 (5d10) poison damage and is poisoned for 1 minute. On a success, it takes half damage. A poisoned creature can repeat the saving throw at the end of each of its turns. ending the effect on a success." }
    - { name: 'Summon Storm (1/Day)', desc: 'Over the next 10 minutes, storm clouds magically gather. At the end of 10 minutes, a storm rages for 1 hour in a 5-mile radius.' }
    - { name: 'Lightning (Recharge 5-6)', desc: 'If the kraken is outside and the weather is stormy, three lightning bolts crack down from the sky, each of which strikes a different target within 120 feet of the kraken. A target makes a DC 24 Dexterity saving throw, taking 28 (8d6) lightning damage or half damage on a save.' }
    - { name: Tentacle, desc: "Melee Weapon Attack: +18 to hit, reach 30 ft., one target. Hit: 28 (4d8 + 10) bludgeoning damage, and the target is grappled (escape DC 26). Until this grapple ends, the target is restrained. A tentacle can be targeted individually by an attack. It shares the kraken's hit points, but if 30 damage is dealt to the tentacle, it releases a creature it is grappling. The kraken can grapple up to 10 creatures." }
    - { name: Fling, desc: 'One Large or smaller object or creature grappled by the kraken is thrown up to 60 feet in a straight line. The target lands prone and takes 21 (6d6) bludgeoning damage. If the kraken throws the target at another creature, that creature makes a DC 26 saving throw, taking the same damage on a failure.' }
legendary_actions:
    - { name: 'The kraken can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Tentacle, desc: 'The kraken makes one tentacle attack.' }
    - { name: Fling, desc: 'The kraken uses Fling.' }
    - { name: 'Squeeze (Costs 2 Actions)', desc: 'The kraken ends any magical effect that is restraining it or reducing its movement and then swims up to half its swim speed without provoking opportunity attacks. During this movement, it can fit through gaps as narrow as 10 feet wide without squeezing.' }
combat:
    - { name: "The kraken summons a lightning storm and doesn't attack until the storm has arrived", desc: 'On its turn, it takes actions in this order of preference: it uses Lightning if it can hit 3 threatening targets, bites if it has a creature grappled, or uses Ink Cloud if underwater. Otherwise, it bites. With its legendary actions, it attacks with its tentacle, or uses Fling if it already has two creatures grappled (saving one of the creatures to bite and swallow). It uses Squeeze to escape confinement and escapes in an Ink Cloud if reduced to 111 hit points or fewer.' }

---
```statblock
monster: Kraken - A5E
```
